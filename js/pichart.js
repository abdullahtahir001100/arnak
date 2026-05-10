// Data for the first pie chart
const chartData1 = [70, 20, 10]; // First pie chart data
const chartLabels1 = ["Income", "Expense", "Balance"];
const chartColors1 = ["#2CB1F0", "#00CA83", "#38EBAC"];

// Data for the second pie chart
const chartData2 = [70, 20, 10]; // Second pie chart data
const chartLabels2 = ["Needs", "Savings", "Wants"];
const chartColors2 = ["#1da6ea", "#10b48e", "#eaa61d"];

// Function to clear the canvas
function clearCanvas(elementId) {
  const canvas = document.getElementById(elementId);
  const ctx = canvas.getContext("2d");
  ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas
}

// Function to create a pie chart
function createPieChart(elementId, chartData, chartLabels, chartColors) {
  const canvasElement = document.getElementById(elementId);
  if (!canvasElement) {
    console.warn(`Canvas with ID ${elementId} not found`);
    return; // Exit if the canvas doesn't exist
  }

  clearCanvas(elementId); // Clear the canvas before creating a new chart
  const ctx = canvasElement.getContext("2d");
  new Chart(ctx, {
    type: "pie",
    data: {
      labels: chartLabels,
      datasets: [
        {
          data: chartData,
          backgroundColor: chartColors,
          borderWidth: 0,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      layout: {
        padding: 20,
      },
      plugins: {
        tooltip: {
          callbacks: {
            label: function (tooltipItem) {
              let label = tooltipItem.label || "";
              let value = tooltipItem.raw;
              return `${label}: $${value * 100}`;
            },
          },
        },
        legend: {
          display: true,
          position: "right",
          labels: {
            generateLabels: function (chart) {
              const data = chart.data;
              return data.labels.map((label, index) => {
                const value = data.datasets[0].data[index];
                const total = data.datasets[0].data.reduce((a, b) => a + b, 0);
                const percentage = Math.round((value / total) * 100) + "%";
                return {
                  text: `${label} ${percentage}`,
                  fillStyle: data.datasets[0].backgroundColor[index],
                  index: index,
                };
              });
            },

            usePointStyle: true,
            boxWidth: 10,
            padding: 20,
            font: {
              size: 14,
              family: "QSemiBold",
              weight: "bold",
              color: "#AFAFAF",
            },
          },
        },
      },
    },
  });
}

// Create the appropriate pie chart based on the page
window.onload = function () {
  if (document.getElementById("pieChart1")) {
    createPieChart("pieChart1", chartData1, chartLabels1, chartColors1);
  } else if (document.getElementById("pieChart2")) {
    createPieChart("pieChart2", chartData2, chartLabels2, chartColors2);
  }
};

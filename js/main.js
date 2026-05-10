/*========== Toggle for main menu ==========*/
$(document).on("click", ".toggle", function () {
  $(".toggle").toggleClass("active");
  $("body").toggleClass("flow");
  $("[nav]").toggleClass("active");
  $(".upperlay").toggleClass("active");
});

// ===toggle===== //
$(document).on("click", ".colored_area > .text_here", function () {
  $(this).parent().toggleClass("active");
  $(this).parent().children(".addition").slideToggle();
});

// ==========owl=========//
$(".testi-carousel").owlCarousel({
  autoplay: true,
  nav: false,
  navText: [
    '<i class="fa fa-arrow-left"></i>',
    '<i class="fa fa-arrow-right"></i>',
  ],
  dots: true,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 10,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
      dots: true,
      nav: false,
    },
    600: {
      items: 2,
    },
    991: {
      items: 3,
    },
    1000: {
      items: 3,
    },
  },
});

/*========== Dropdown ==========*/

$("._dropBtn").click(function (e) {
  e.stopPropagation();
  var $this = $(this).parent().children("._dropCnt");
  $("._dropCnt").not($this).removeClass("active");
  var $parent = $(this).parent("._dropDown");
  $parent.children("._dropCnt").toggleClass("active");
});
$(document).on("click", "._dropCnt", function (e) {
  e.stopPropagation();
});
$(document).on("click", function () {
  $("._dropCnt").removeClass("active");
});

// =====
$(document).ready(function () {
  $(".dots img").on("click", function (event) {
    event.stopPropagation();
    var $dropdown = $(this).next(".dropdowns");
    $(".dropdowns").not($dropdown).removeClass("active");
    $dropdown.toggleClass("active");
  });

  $(document).on("click", function () {
    $(".dropdowns").removeClass("active");
  });

  $(".dropdowns").on("click", function (event) {
    event.stopPropagation();
  });
});

// ===
// _____popup_____*/
$(".popBtn").on("click", function (event) {
  var popUp = $(this).data("popup");

  $(".popup[data-popup= " + popUp + "]").fadeIn();
});
$(".crosBtn").on("click", function (event) {
  $(".popup").fadeOut();
  $("body").removeClass("flow");
});
// =======
$(document).ready(function () {
  $(".progress-value").each(function () {
    var $this = $(this);
    var progressValue = parseFloat($this.data("progress"));

    $this
      .circleProgress({
        value: progressValue,
        size: 230,
        thickness: 10,
        fill: { color: "#3498db" },
        emptyFill: "#f0f0f0",
        startAngle: -Math.PI / 2,
        animation: { duration: 2000, easing: "circleProgressEasing" },
        step: function (n, progressValue) {
          // Update the percentage dynamically during animation
          var percentage = Math.round(progressValue * 100);
          $this.find(".percent").text(percentage + "%"); // Update percentage text
        },
      })
      .on("circle-animation-progress", function (event, progress, stepValue) {
        // Ensure percentage updates during animation
        var percentage = Math.round(stepValue * 100);
        $this.find(".percent").text(percentage + "%"); // Update percentage dynamically
      });
  });
});
// Function to create bar chart
function createBarChart(
  chartId,
  values,
  labels,
  labelText,
  isPercentage,
  color,
  barPercentage,
  categoryPercentage
) {
  var ctx = document.getElementById(chartId).getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: labels,
      datasets: [
        {
          label: labelText,
          data: values,
          backgroundColor: color,
          borderColor: color,
          borderWidth: 1,
          borderRadius: 5,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      layout: {
        padding: {
          top: 20,
          bottom: 20,
        },
      },
      scales: {
        y: {
          beginAtZero: true,
          max: isPercentage ? 100 : 200,
          ticks: {
            color: "#666",
            font: {
              size: 12,
              family: "Arial",
            },
            stepSize: isPercentage ? 20 : 50,
            callback: function (value) {
              return isPercentage ? `${value}%` : `$${value}`;
            },
          },
          grid: {
            color: "#e0e0e0",
          },
        },
        x: {
          ticks: {
            color: "#666",
            font: {
              size: 12,
              family: "Arial",
            },
          },
          grid: {
            display: false,
          },
        },
      },
      plugins: {
        tooltip: {
          backgroundColor: "#fff",
          titleColor: "#333",
          bodyColor: "#333",
          borderColor: "#ccc",
          borderWidth: 1,
          padding: 10,
          callbacks: {
            label: function (tooltipItem) {
              return isPercentage
                ? `Expense: ${tooltipItem.raw}%`
                : `Expense: $${tooltipItem.raw}`;
            },
          },
        },
        legend: {
          display: false,
        },
      },
      barPercentage: barPercentage,
      categoryPercentage: categoryPercentage,
    },
  });
}
// Creating the first bar chart (percentage)
createBarChart(
  "chart1",
  [95, 65, 45, 82, 82, 95, 60, 95, 100, 0, 0, 0],
  [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ],
  "Expense percentage of income",
  true,
  "rgba(29, 166, 234, 1)",
  0.7, // Custom bar width for chart 1
  0.9 // Custom category width for chart 1
);
// Creating the second bar chart (dollar values)
createBarChart(
  "chart2",
  [150, 80, 60, 120, 100, 90, 85, 85, 85],
  [
    "Rent",
    "Grocery",
    "Utilities",
    "Insurance",
    "Transport",
    "Sub cat",
    "Sub cat",
    "Sub cat",
    "Sub cat",
  ],
  "Average expense per subcategory",
  false,
  "rgba(16, 180, 142, 1)",
  0.8, // Custom bar width for chart 2
  0.8 // Custom category width for chart 2
);
// Creating the third bar chart (example data)
createBarChart(
  "chart3",
  [190, 120, 90, 150],
  ["Freelancing", "Business", "Shop", "Salary"],
  "Example Expense Data",
  false,
  "rgba(234, 166, 29, 1)",
  0.7,
  0.7
);

// =========

//========

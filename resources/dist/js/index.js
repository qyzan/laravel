$("#btn-slider").click(function () {
  if ($("#sliders").hasClass("active")) {
    $("#sliders").removeClass("active");
    $("#sliders-background").removeClass("active");
  } else {
    $("#sliders").addClass("active");
    $("#sliders-background").addClass("active");
  }
});

$("#sliders-background").click(function () {
  $("#sliders").removeClass("active");
  $("#sliders-background").removeClass("active");
});

// this for char one type bar
var ctx = document.getElementById("myChartOne").getContext("2d");
var myChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["XSS", "Sec-Misconf", "Directory", "Open Port"],
    datasets: [
      {
        label: "Score Vulnerabilities",
        data: [6, 6, 1, 1, 10],
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
        ],
        borderColor: ["rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)"],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// this for chart Two type line
var ctx = document.getElementById("myChartTwo").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: ["", "XSS", "Sec-Misconf", "Directory", "Open Port"],
    datasets: [
      {
        label: "Grafik Vulnerabilities",
        data: [0, 6, 6, 1, 1, 10],
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
        ],
        borderColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

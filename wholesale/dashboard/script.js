var ctx2 = document.getElementById("myChart2");
var myChart2 = new Chart(ctx2, {
  type: "line",
  data: {
    labels: ["Food", "Tech", "Clothes", "Agri.", "Laptop", "Phone"],
    datasets: [
      {
        label: "Category",
        data: [1, 2, 4, 2, 5, 2],
        backgroundColor: [
          "#ffcb3e",
          "#FF5733",
          "#c1549c",
          "#7e5495",
          "#fb836f",
          "#33546d",
        ],
        borderColor: [
          "#ffcb3e",
          "#FF5733",
          "#c1549c",
          "#7e5495",
          "#fb836f",
          "#33546d",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
    responsive: true,
    scales: {},
  },
});

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["Food", "Tech", "Clothes", "Agri.", "Laptop", "Phone"],
    datasets: [
      {
        label: "Category",
        data: [1, 2, 4, 2, 5, 2],
        backgroundColor: [
          "#ffcb3e",
          "#FF5733",
          "#c1549c",
          "#7e5495",
          "#fb836f",
          "#33546d",
        ],
        borderColor: [
          "#ffcb3e",
          "#FF5733",
          "#c1549c",
          "#7e5495",
          "#fb836f",
          "#33546d",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
    responsive: true,
    scales: {},
  },
});

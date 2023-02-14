// JavaScript Document
var xValues = ["Food", "Shopping", "Travel", "Transfer", "Other"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#A190F7",
  "#00aba9",
  "#73de90",
  "#e8c3b9",
  "gray"
];


new Chart("myChart",{  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Spending"
    }
  }
});
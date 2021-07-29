var option = {
  animation: true,
  delay: 2000,
};

var toastElList = [].slice.call(document.querySelectorAll(".toast"));
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl, option);
});
var toastElList1 = [].slice.call(document.querySelectorAll(".test"));
var toastList1 = toastElList1.map(function (toastEl1) {
  return new bootstrap.Toast(toastEl1, option);
});

function see() {
  for (var i = 0; i < toastList.length; i++) {
    toastList[i].show();
  }
}
function cart() {
  for (var i = 0; i < toastList1.length; i++) {
    toastList1[i].show();
  }
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)

})
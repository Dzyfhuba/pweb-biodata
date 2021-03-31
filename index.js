function btnClick(nomer) {
  const pageBlur = document.querySelector(".pageBlur");
  pageBlur.classList.toggle("active");

  // const detailPage = document.querySelector('.detailCard');
  // detailPage.classList.toggle('active');

  var boten = document.getElementById("detailCard" + nomer);
  boten.style.display = "block";
}
function btnClose(nomer) {
  var cls = document.getElementById("detailCard" + nomer);
  cls.style.display = "none";

  const pageBlur = document.querySelector(".pageBlur");
  pageBlur.classList.toggle("active");
}

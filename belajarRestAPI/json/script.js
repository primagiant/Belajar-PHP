let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    let human = JSON.parse(this.responseText);
    console.log(human);
  }
};
xhr.open("GET", "proj1.json", true);
xhr.send();

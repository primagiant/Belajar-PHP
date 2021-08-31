const cardContainer = document.querySelector(".card__container");
const namaKategori = document.querySelector(".namaKategori");
const link = document.querySelectorAll(".nav-link");

function allMenu() {
  fetch("./data/pizza.json")
    .then((response) => response.json())
    .then((response) =>
      response.menu.forEach((data) => {
        cardContainer.innerHTML += `
          <div class="col-3 mb-4">
          <div class="card" style="width: 18rem">
            <img
              src="./img/pizza/${data.gambar}"
              class="card-img-top"
              alt="${data.nama}"
            />
            <div class="card-body">
              <h5 class="card-title">${data.nama}</h5>
              <h6 class="card-text">Rp. ${data.harga}</h6>
              <p class="card-text">${data.deskripsi}</p>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
        </div>
          `;
      })
    );
}

allMenu();

link.forEach((e) =>
  e.addEventListener("click", function () {
    link.forEach((el) => el.classList.remove("active"));
    this.classList.add("active");

    let namaLink = this.innerHTML;
    namaKategori.innerHTML = namaLink;

    let content = "";

    let kategori = e.dataset.kategori;

    if (e.dataset.kategori == "all") {
      allMenu();
      return;
    }
    fetch("./data/pizza.json")
      .then((resp) => resp.json())
      .then((resp) => {
        let menu = resp.menu;
        menu.forEach((m) => {
          if (m.kategori == kategori) {
            content += `
                    <div class="col-3 mb-4">
                    <div class="card" style="width: 18rem">
                    <img
                        src="./img/pizza/${m.gambar}"
                        class="card-img-top"
                        alt="${m.nama}"
                    />
                    <div class="card-body">
                        <h5 class="card-title">${m.nama}</h5>
                        <h6 class="card-text">Rp. ${m.harga}</h6>
                        <p class="card-text">${m.deskripsi}</p>
                        <a href="#" class="btn btn-warning">Pesan Sekarang</a>
                    </div>
                    </div>
                </div>
                `;
          }
          cardContainer.innerHTML = content;
        });
      });
  })
);

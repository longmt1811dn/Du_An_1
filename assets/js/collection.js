const DATA_DONG_HO = [
  {
    srcImg: "./assets/image/dongho_orient (1).png",
    altImg: "Ảnh 2",
    nameImg: "analog",
    count: "6",
  },
  {
    srcImg: "./assets/image/dongho_orient (2).png",
    altImg: "Ảnh 1",
    nameImg: "digital",
    count: "7",
  },
  {
    srcImg: "./assets/image/dongho_orient (3).png",
    altImg: "Ảnh 3",
    nameImg: "gold case",
    count: "9",
  },
  {
    srcImg: "./assets/image/dongho_orient (4).png",
    altImg: "Ảnh 4",
    nameImg: "silever case",
    count: "8",
  },
];

const ROOT = document.getElementById("all-collection__show");

function run() {
  console.log(DATA_DONG_HO);
  DATA_DONG_HO.forEach((element) => {
    let divProduct = document.createElement("div");
    divProduct.classList.add("all-collection__show-item");

    divProduct.innerHTML = `
    <div class="all-collection__item-img">
            <a href="./collection.html"><img src="${element.srcImg}" alt="${element.altImg}"></a>
    </div>

    <div class="all-collection__item-detail">
            <p class="text__gray">${element.nameImg}</p>
            <span class="text__gray">${element.count} Items</span>
            <button class="btn">
                    <a href="collection.html">Read More</a>
            </button>
    </div>
                `;

    ROOT.appendChild(divProduct);
  });
}

run();

const DATA_DONG_HO = [
  {
    srcImg: "./assets/image/dongho_orient (1).png",
    altImg: "Ảnh 2",
    nameImg: "Sản phẩm 2",
    priceImg: "200.000đ",
  },
  {
    srcImg: "./assets/image/dongho_orient (2).png",
    altImg: "Ảnh 1",
    nameImg: "Sản phẩm 1",
    priceImg: "100.000đ",
  },
  {
    srcImg: "./assets/image/dongho_orient (3).png",
    altImg: "Ảnh 2",
    nameImg: "Sản phẩm 2",
    priceImg: "200.000đ",
  },
  {
    srcImg: "./assets/image/dongho_orient (4).png",
    altImg: "Ảnh 2",
    nameImg: "Sản phẩm 2",
    priceImg: "200.000đ",
  },
  {
    srcImg: "./assets/image/dongho_orient (5).png",
    altImg: "Ảnh 2",
    nameImg: "Sản phẩm 2",
    priceImg: "200.000đ",
  },
  {
    srcImg: "./assets/image/dongho_orient (6).png",
    altImg: "Ảnh 2",
    nameImg: "Sản phẩm 2",
    priceImg: "200.000đ",
  },
];

const ROOT = document.getElementById("collection__product-list");

function run() {
  console.log(DATA_DONG_HO);
  DATA_DONG_HO.forEach((element) => {
    let divProduct = document.createElement("div");
    divProduct.classList.add("product");

    divProduct.innerHTML = `
          <div class="product__img">
          <div class="imgOverlay">
            <img
              src="${element.srcImg}"
              alt="${element.altImg}"
            />
          </div>
          <div class="product__img-button">
            <a href="#" class="compare" title="Compare Product"
              ><i class="far fa-chart-bar"></i
            ></a>
            <a href="#" class="compare" title="Quick View"
              ><i class="far fa-eye"></i
            ></a>
            <a href="#" class="compare" title="Product Link"
              ><i class="fas fa-link"></i
            ></a>
            <a href="#" class="compare" title="Add to wishlist"
              ><i class="fas fa-heart"></i
            ></a>
          </div>
        </div>
        <div class="product__detail">
          <div class="product__detail-title">
            <a href="">${element.nameImg}</a>
          </div>
          <div class="product__detail-price">
            <span class="price">${element.priceImg}</span>
            <span class="starrating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </span>
          </div>
          <div class="product__detail-sale">
            <span>Ex to Sale Tax</span>
          </div>
          <div class="product__detail-cart">
            <a href="" class="btn-cart"
              ><i class="fas fa-shopping-cart"></i>Add to cart</a
            >
          </div>
        </div>


          `;

    ROOT.appendChild(divProduct);
  });
}

run();

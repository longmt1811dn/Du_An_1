const DATA_MEMBER = [
  {
    member: "Member",
    srcImg: "./assets/image/avata_lam.JPG",
    role: "Front End Developer",
    name: "Chung Chí Lâm",
    description: "- Chăm học hỏi những thứ mới </br> - Tình cảm sâu đậm",
    link: "https://www.facebook.com/chungchilam12/",
  },
  {
    member: "Team leader FE",
    srcImg: "./assets/image/avata_ly.jpg",
    role: "Front End Developer",
    name: "Đỗ Thành Lý",
    description:
      " -khéo ăn thì no </br> - khéo cơ thì tiết kiệm </br> - Thích trồng rau nuôi cá </br> - Chơi hết mình",
    link: "https://www.facebook.com/ly.thanh.52090008",
  },
  {
    member: "Team leader BE , Leader",
    srcImg: "./assets/image/avata_long.jpg",
    role: "Back End Developer",
    name: "Mai Tiểu Long",
    description: "- Tịnh tâm </br>- Thiền định </br> - Tích cực",
    link: "https://www.facebook.com/tieulong.mai.18",
  },
  {
    member: "Member",
    srcImg: "./assets/image/avata_phat.jpg",
    role: "Back End Developer",
    name: "Lê Xuân Phát",
    description: "Lorem",
    link: "https://www.facebook.com/contact.0783635341",
  },
];

const ROOT = document.getElementById("introduct");

function run() {
  console.log(DATA_MEMBER);
  DATA_MEMBER.forEach((element) => {
    let divmember = document.createElement("div");
    divmember.classList.add("introduct__member");

    divmember.innerHTML = `
    <div class="introduct__member-info">
    <h1 class="title__borderbottom introduct__info-member">${element.member}</h1>
    <h2 class="introduct__info-role">${element.role}</h2>
    <p class="text__gray introduct__info-text">${element.name}</p>
    <p class="text__gray introduct__info-text">${element.description}</p>
    <a href="${element.link}" class="text__gray introduct__info-text">Link contact</a>
</div>
<div class="introduct__member-img">
    <img src="${element.srcImg}" alt="">
</div>
                `;

    ROOT.appendChild(divmember);
  });
}

run();

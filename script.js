const listGame = document.getElementById("listGame")

const dataGame = [
  {
    nama: "GTA San Andreas",
    gambar: "https://source.unsplash.com/800x400/?game",
    deskripsi: "Game open world legendaris.",
    link: "https://www.mediafire.com/file/i68k59lrt2silpa/SarahsHouse_v0.8.6.zip/file"
  },
  {
    nama: "Minecraft",
    gambar: "https://source.unsplash.com/800x400/?minecraft",
    deskripsi: "Game sandbox paling populer.",
    link: "https://example.com/minecraft.apk"
  }
]

dataGame.forEach(game => {
  listGame.innerHTML += `
    <div class="card">
      <img src="${game.gambar}">
      <h2>${game.nama}</h2>
      <p>${game.deskripsi}</p>
      <a href="${game.link}" target="_blank">⬇ Download</a>
    </div>
  `
})

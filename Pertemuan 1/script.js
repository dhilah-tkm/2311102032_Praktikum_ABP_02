/* Efek bintang di background */ 
(function () {
  const c = document.getElementById("stars");
  for (let i = 0; i < 80; i++) {
    const s = document.createElement("div");
    s.className = "star";
    const sz = Math.random() * 2.5 + 0.5;
    s.style.cssText = `
      width:${sz}px;height:${sz}px;
      top:${Math.random() * 100}%;left:${Math.random() * 100}%;
      --d:${(Math.random() * 3 + 2).toFixed(1)}s;
      animation-delay:${(Math.random() * 4).toFixed(1)}s;
    `;
    c.appendChild(s);
  }
})();

/* Logika slot */
const SYMBOLS = [
  { em: "🎁", label: "Hadiah" },
  { em: "🌙", label: "Bulan" },
  { em: "🕌", label: "Masjid" },
  { em: "⭐", label: "Bintang" },
  { em: "🪔", label: "Lentera" },
  { em: "🌴", label: "Pohon" },
];
const KETUPAT = { em: "🫘", label: "Ketupat" };

let spinCount = 0;
let spinning = false;

// Peluang menang (20%)
function shouldWin() {
  return Math.random() < 0.2;
}

function startSpin() {
  if (spinning) return;
  spinning = true;
  spinCount++;
  document.getElementById("badgePutaran").textContent =
    `Putaran ke-${spinCount}`;
  const btn = document.getElementById("btnPutar");
  btn.disabled = true;

  [0, 1, 2].forEach((i) => {
    document.getElementById(`reel${i}`).classList.remove("winner");
    document.getElementById(`reel${i}`).classList.add("spinning");
  });

  const win = shouldWin();
  const delays = [900, 1400, 1900];
  const results = [];

  if (win) {
    results[0] = results[1] = results[2] = KETUPAT;
  } else {
    do {
      results[0] = SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)];
      results[1] = SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)];
      results[2] = SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)];
    } while (results[0] === results[1] && results[1] === results[2]);
  }

  delays.forEach((delay, i) => {
    setTimeout(() => {
      const reelEl = document.getElementById(`reel${i}`);
      const symEl = document.getElementById(`sym${i}`);
      reelEl.classList.remove("spinning");
      symEl.textContent = results[i].em;
      symEl.nextElementSibling.textContent = results[i].label;

      if (i === 2) {
        setTimeout(() => {
          spinning = false;
          btn.disabled = false;
          if (win) {
            [0, 1, 2].forEach((j) =>
              document.getElementById(`reel${j}`).classList.add("winner"),
            );
            launchConfetti();
            new bootstrap.Modal(document.getElementById("modalWin")).show();
          } else {
            new bootstrap.Modal(document.getElementById("modalLose")).show();
          }
        }, 300);
      }
    }, delay);
  });
}

function resetGame() {
  [0, 1, 2].forEach((i) =>
    document.getElementById(`reel${i}`).classList.remove("winner"),
  );
}

/* Efek Confetti */
function launchConfetti() {
  const container = document.getElementById("confettiContainer");
  container.innerHTML = "";
  const colors = [
    "#f5c518",
    "#ff6b6b",
    "#48dbfb",
    "#ff9f43",
    "#1dd1a1",
    "#ffeaa7",
    "#a29bfe",
  ];
  for (let i = 0; i < 80; i++) {
    const p = document.createElement("div");
    p.className = "confetti-piece";
    p.style.cssText = `
      left:${Math.random() * 100}%;
      top:${-10}px;
      background:${colors[Math.floor(Math.random() * colors.length)]};
      width:${6 + Math.random() * 8}px;
      height:${6 + Math.random() * 8}px;
      border-radius:${Math.random() > 0.5 ? "50%" : "2px"};
      animation-duration:${1.5 + Math.random() * 1.5}s;
      animation-delay:${Math.random() * 0.5}s;
    `;
    container.appendChild(p);
  }
  setTimeout(() => (container.innerHTML = ""), 3500);
}

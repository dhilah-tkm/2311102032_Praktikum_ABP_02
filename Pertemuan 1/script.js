const SYMBOLS = ["🌙", "🕌", "🎁", "⭐", "🌴", "🪔"];
const WIN_SYMBOL = "🫘";
let spinCount = 0;
let isSpinning = false;

function startSpin() {
  if (isSpinning) return;

  isSpinning = true;
  spinCount++;
  document.getElementById("badgePutaran").innerText = `PUTARAN KE-${spinCount}`;

  const btn = document.getElementById("btnPutar");
  btn.disabled = true;

  // Tentukan hasil di awal biar fair
  const win = Math.random() < 0.2; // 20% peluang menang
  const finalResults = win
    ? [WIN_SYMBOL, WIN_SYMBOL, WIN_SYMBOL]
    : [
        SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)],
        SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)],
        SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)],
      ];

  // Efek visual ngacak teks (sebagai pengganti animasi CSS)
  const intervals = [0, 1, 2].map((i) => {
    return setInterval(() => {
      document.getElementById(`sym${i}`).innerText =
        SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)];
    }, 100);
  });

  // Berhenti satu per satu (staggered stop)
  [1000, 1800, 2500].forEach((delay, i) => {
    setTimeout(() => {
      clearInterval(intervals[i]); // Stop ngacak
      document.getElementById(`sym${i}`).innerText = finalResults[i]; // Pasang hasil asli

      // Kalau sudah reel terakhir berhenti
      if (i === 2) {
        setTimeout(() => {
          isSpinning = false;
          btn.disabled = false;
          if (win) {
            new bootstrap.Modal(document.getElementById("modalWin")).show();
          } else {
            new bootstrap.Modal(document.getElementById("modalLose")).show();
          }
        }, 500);
      }
    }, delay);
  });
}

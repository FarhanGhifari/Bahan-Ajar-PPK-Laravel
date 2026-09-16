/**
 * Fitur Header BOM (Browser Object Model) - SRS-002
 * - Jam berjalan real-time format HH:MM:SS (24 jam)
 * - Deteksi browser via navigator.userAgent
 */

function updateJam() {
    const jamEl = document.getElementById("jam");
    if (!jamEl) return;
    const now = new Date();
    const hh = String(now.getHours()).padStart(2, "0");
    const mm = String(now.getMinutes()).padStart(2, "0");
    const ss = String(now.getSeconds()).padStart(2, "0");
    jamEl.textContent = `${hh}:${mm}:${ss}`;
}

function detectBrowser() {
    const browserEl = document.getElementById("browser-info");
    if (!browserEl) return;
    const ua = navigator.userAgent;
    let browser = "Browser Tidak Diketahui";

    if (ua.indexOf("Firefox") !== -1) {
        browser = "Firefox";
    } else if (ua.indexOf("Edg") !== -1) {
        browser = "Edge";
    } else if (ua.indexOf("Chrome") !== -1) {
        browser = "Chrome";
    } else if (ua.indexOf("Safari") !== -1) {
        browser = "Safari";
    }

    browserEl.textContent = browser;
}

document.addEventListener("DOMContentLoaded", function () {
    updateJam();
    setInterval(updateJam, 1000);
    detectBrowser();
});

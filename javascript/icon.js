const icon = document.querySelector("link[rel='icon']");

const isDarkMode = () => globalThis.matchMedia?.("(prefers-color-scheme:dark)").matches ?? false;

const darkLightIcon = () => {
    isDarkMode();
    if (isDarkMode()) {
        icon.href = "./images/icons-logos/icon-white.svg";
        if (!isDarkMode()) {
            location.reload();
        }
    } else if (!isDarkMode) {
        icon.href = "./images/icons-logos/icon.svg";
        if (isDarkMode()) {
            location.reload();
        }
    }
}

darkLightIcon();
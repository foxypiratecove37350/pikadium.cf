document.documentElement.addEventListener("copy", (e) => {
    const selectedText = document.getSelection().toString();
    e.clipboardData.setData(
        'text/plain',
        selectedText.replaceAll("ș", "").replaceAll("ǵ ", "P").replaceAll("ǵ", "P").replaceAll("Ȗ", "I").replaceAll("ȡ", "K").replaceAll("Ȕ", "A").replaceAll("ȕ", "D").replaceAll("ȗ", "U").replaceAll("Ș", "M").replaceAll("Ƞ", "")
        );
    e.preventDefault();
});
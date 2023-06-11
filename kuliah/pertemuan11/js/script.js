const keyword = document.getElementByid('keyword');
const searchContainer = document.getElementByid
('search-container');

keyword.onkeyup = function() {
    fetch('ajax/search.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((text) => searchContainer.innerHTML = text())
}

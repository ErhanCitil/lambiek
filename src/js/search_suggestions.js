document.querySelector("#search").addEventListener("input", fetchSuggestions);

function fetchSuggestions() {
    let searchTerm = document.querySelector("#search").value;
    if (searchTerm) {
        let suggestionsContainer = document.querySelector("#suggestions");
        suggestionsContainer.innerHTML = "";
        fetch(`../common/search_suggestions_api.php?search=${searchTerm}`)
            .then(response => response.json())
            .then(suggestions =>
                suggestions.forEach(suggestion => {
                    if (suggestion) {
                        suggestionsContainer.innerHTML += `<option value="${suggestion.name}">`;
                    }
                })
            );
    }
}

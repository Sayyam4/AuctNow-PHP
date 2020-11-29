

async function searchProducts(event) {
    let resultDiv = document.getElementById("results")
    while (resultDiv.firstChild) {
        resultDiv.removeChild(resultDiv.lastChild);
      }
    let search_text = document.getElementById("search_input").value
    if(search_text.length === 0 || search_text.trim() === "")    return;
    let response = await fetch('/product/search', {
        method: 'POST',
        body: JSON.stringify({search: search_text}),
        headers: {
            'Content-Type': 'application/json'
        }
    });
    let result = await response.json();
    
    console.log(result)
    result.data.forEach(prod => {
        let div  = document.createElement('div')
        let p = document.createElement('p')
        p.setAttribute("id",prod.prod_id)
        p.innerText = prod.prod_name
        div.appendChild(p)
        resultDiv.appendChild(div)
    });
}



function clearResults() {
    let resultDiv = document.getElementById("results")
    while (resultDiv.firstChild) {
        resultDiv.removeChild(resultDiv.lastChild);
      }   
    document.getElementById("search_input").value = ""
}
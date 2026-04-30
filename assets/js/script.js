document.querySelector("form").addEventListener("submit", function(e) { 
 
    let nom = document.querySelector("input[name='nom']").value; 
    let prenom = document.querySelector("input[name='prenom']").value; 
 
    if(nom.length < 2 || prenom.length < 2) { 
        alert("Nom et prénom doivent contenir au moins 2 caractères"); 
        e.preventDefault(); 
    } 
 
});

document.querySelectorAll("a[href*='delete']").forEach(a => { 
    a.addEventListener("click", function(e) { 
        if(!confirm("Confirmer la suppression ?")) { 
            e.preventDefault(); 
        } 
    }); 
});
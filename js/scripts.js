document.addEventListener('DOMContentLoaded', () => {
    let rows = document.querySelectorAll('tbody tr');
    add_background_color(rows);
});

function add_background_color(collection){
    collection.forEach(element => {
        if ((element.dataset.id % 2) != 0) 
            element.classList.add('tr_background'); 
    });
}  
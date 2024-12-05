

const dropbtn = document.querySelector('.dropbtn');
dropbtn.addEventListener('mouseover', () => {
 const dropdownContent = document.querySelector('.dropdown-links');
 if (dropdownContent.style.display === 'block') {
     dropdownContent.style.display = 'none';
 } else {
     dropdownContent.style.display = 'block';
 }
});
window.addEventListener('click', (event) => {
 if (!event.target.matches('.dropbtn')) {
     const dropdownContent = document.querySelector('.dropdown-links');
     if (dropdownContent.style.display === 'block') {
         dropdownContent.style.display = 'none';
     }
 }
});

const dropbtna = document.querySelector('.dropbtn-a');
dropbtna.addEventListener('mouseover', () => {
 const dropdownContenta = document.querySelector('.dropdown-links-a');
 if (dropdownContenta.style.display === 'block') {
     dropdownContenta.style.display = 'none';
 } else {
     dropdownContenta.style.display = 'block';
 }
});
window.addEventListener('click', (event) => {
 if (!event.target.matches('.dropbtn-a')) {
     const dropdownContenta = document.querySelector('.dropdown-links-a');
     if (dropdownContenta.style.display === 'block') {
         dropdownContenta  .style.display = 'none';
     }
 }
});



import './bootstrap';

const inputStandardName = document.getElementById('standard');
const btnFindStandard = document.getElementById('btnFindStandard');
const standardList = document.getElementById('standardList');

btnFindStandard.addEventListener('click', function (e){
    // e.preventDefault();
    let standardName = inputStandardName.value.trim();
    console.log('click:', standardName);
})

console.log('گرسی');
inputStandardName.addEventListener('keydown', function (e){
    let standardName = e.target.value.trim();
    // console.log(standardName);
    if(e.keyCode === 13){
        console.log('Enter: ', standardName);
    }
});



async function fetchStandardApi() {
    try {
        let response = await fetch('http://localhost:8002/standard/json');

        if (response.ok) {
            let data = await response.json();
            return data;
        }
    } catch(e) {
        // Handle the unexpected error
    }
};
  
fetchStandardApi().then(data => {
    if (typeof data == 'object') {
        // ...
        console.log('garsivaz:', data);
    }
});

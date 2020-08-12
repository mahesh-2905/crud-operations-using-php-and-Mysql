$(".btnedit").click( e =>{
    let textvalues = displayData(e);
    console.log(textvalues);
    let id = $("input[name*='ID']");
    let name = $("input[name*='NAME']");
    let email = $("input[name*='EMAIL']");
    let mobile = $("input[name*='MOBILE']");
    let dob = $("input[name*='DOB']");
    let pincode = $("input[name*='PIN']");
    id.val(textvalues[0]);
    name.val(textvalues[1]);
    email.val(textvalues[2]);
    mobile.val(textvalues[3]);
    dob.val(textvalues[4]);
    pincode.val(textvalues[5]);
});
$('#id').hide();
$('.id').hide();
function displayData(e) {
    let id = 0;
    const td = $("tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}
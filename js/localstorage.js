/**
 * Created by jakob on 06-03-17.
 */
$(function () {
    localStorage.setItem(Date.now(), new Date());
    populateVisits();

    if (localStorage.length % 10 == 0){
        $.notify("This is your "+localStorage.length+"th visit", {position:"right bottom", className:"success"});
    }
});

function populateVisits() {
    for (var i = localStorage.length-1; i >= 0; i--) {
        $("#tableBody").append(getTR(localStorage.key(i), localStorage.getItem(localStorage.key(i))));
    }
}

function getTR(timestamp, date) {
    return "<tr>" +
        "<td>" + new Date(date).toLocaleDateString("da-DK") + "</td>" +
        "<td>" + new Date(date).toTimeString() + "</td>" +
        "<td>" + timestamp + "</td>" +
        "</tr>";
}
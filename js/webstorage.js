/**
 * Created by jakob on 06-03-17.
 */
$(function () {
    localStorage.setItem(Date.now(), new Date());
    populateVisits();
});

function populateVisits() {
    for (var i = 0; i < localStorage.length; i++) {
        $("#tableBody").append(getTR(localStorage.key(i), localStorage.getItem(localStorage.key(i))));
    }
}

function getTR(timestamp, date) {
    return "<tr>" +
        "<td>" + date + "</td>" +
        "<td>" + timestamp + "</td>" +
        "</tr>";
}
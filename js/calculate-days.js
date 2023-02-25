function redirectToPage() {
    // Get the values from the input fields
    const drop = document.getElementById("drop").value;
    // Save the values to local storage
    localStorage.setItem("drop", drop);

    // Get the value of the selected option
    const selectedValue = document.getElementById("cars").value;

    // Check the selected value and redirect to the appropriate page
    if (selectedValue === "Sedan") {
        window.location.href = "car-sedan.html";
    } else if (selectedValue === "SUV") {
        window.location.href = "contact.html";
    } else if (selectedValue === "Micro") {
        window.location.href = "car-sedan.html";
    } else if (selectedValue === "Minibus") {
        window.location.href = "car-sedan.html";
    } else {
        alert("Please select a valid option.");
    }
}

function calculateDurationAndRedirect() {


    // Get the arrival and departure times from the input fields
    const arrivalTime = new Date(document.getElementById("book_pick_date").value);
    const departureTime = new Date(document.getElementById("book_off_date").value);

    // Calculate the duration in days
    const durationInDays = Math.round((departureTime - arrivalTime) / (1000 * 60 * 60 * 24)) + 1;

    // Save the duration in local storage
    localStorage.setItem("durationInDays", durationInDays);

}

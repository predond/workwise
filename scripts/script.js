var employeesList = document.getElementById("employeesList");
if (employeesList) {
    employeesList.addEventListener("click", function(e) { // e = event object
        var employeeId = e.target.closest(".employeeTile").getAttribute("data-id");
        
        // Create a form dynamically
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "employees_list_details.php");

        // Create an input element for Full Name
        var FN = document.createElement("input");
        FN.setAttribute("type", "text");
        FN.setAttribute("name", "employeeId");
        FN.setAttribute("value", employeeId);
        FN.setAttribute("hidden", "");

        // Append the full name input to the form
        form.appendChild(FN);
        document.body.appendChild(form);

        form.submit();
    });
}

var returns = Array.from(document.getElementsByClassName("return"));
if (returns.length > 0) {
    returns.map((e) => {
        var arrow = document.createElement("div");
        arrow.classList = "arrow";

        var span = document.createElement("span");
        arrow.appendChild(span.cloneNode());
        arrow.appendChild(span.cloneNode());
        arrow.appendChild(span.cloneNode());

        var text = document.createElement("p");
        text.innerText = "POWRÓT";
        e.appendChild(arrow);
        e.appendChild(text);

        e.addEventListener('click', (event) => {
            if (e.getAttribute("data-location")) {
                window.location.href = e.getAttribute("data-location");
            }
            else {
                window.location.href = "mainPage.php";
            }
        })
    });
}
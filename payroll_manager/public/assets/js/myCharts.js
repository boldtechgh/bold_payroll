$(document).ready(function () {
    var SITEURL = "";

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    const ctx = document.getElementById("myChart");

    $.ajax({
        url: SITEURL + "/employee_distro",

        type: "GET",
        success: function (data) {
            displayMessage("Welcome");
            console.log("Data: ", data[0]);

            let departments = [];

            let employeeCount = data[1];

            data[0].forEach((dept) => {
                departments.push(dept.department_short_name);
            });

            console.log("Dept: ", departments);

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: departments,
                    datasets: [
                        {
                            label: "# of Employees",
                            data: employeeCount,
                            backgroundColor: "rgba(54, 162, 235, 0.2)",
                            borderColor: "rgb(54, 162, 235)",
                            borderWidth: 2,
                        },
                    ],
                },
                options: {
                    scales: {
                        x: {
                            gridLines: {
                                color: "#ffffff",
                            },
                            title: {
                                display: true,
                                align: "center",
                                text: "Departments",
                            },
                        },

                        y: {
                            beginAtZero: true,
                            min: 0,
                            max: 10,
                            gridLines: {
                                color: "#ffffff",
                            },
                        },
                    },
                },
            });
        },
    });
});

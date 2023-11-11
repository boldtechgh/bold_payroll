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
            let departments = [];

            let employeeCount = data[1];

            data[0].forEach((dept) => {
                departments.push(dept.department_short_name);
            });

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
                        yAxes: [
                            {
                                ticks: {
                                    beginAtZero: true,
                                    // min: 0,
                                    // max: 2,
                                    // suggestedMax: 40 + 20,
                                    padding: 10,
                                },
                                gridLines: {
                                    drawBorder: false,
                                },
                            },
                        ],
                        xAxes: [
                            {
                                title: {
                                    display: true,
                                    align: "center",
                                    text: "Departments",
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                },
                            },
                        ],
                    },
                },
            });
        },
    });
});

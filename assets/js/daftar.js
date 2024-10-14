document.addEventListener("DOMContentLoaded", function() {
    const name_input = document.getElementById('name');
    const ipk_input = document.getElementById('ipk');

    // Jika input name ada
    if (name_input) {
        name_input.addEventListener('blur', function() {
            // Apakah sudah terisi atau belum, jika sudah jangan fetch lagi
            if (ipk_input.value) return;

            fetch("../includes/getIpk.php").then(response => response.text()).then(data => {
                if (!data) {
                    console.error('Error: Failed to fetch data');
                    return;
                }

                ipk_input.value = data;
                const IPK = parseFloat(data);

                if (IPK < 3) {
                    document.getElementById('beasiswa').setAttribute("disabled", "true");
                    document.getElementById('berkas').setAttribute("disabled", "true");
                    document.getElementById('submit_button').setAttribute("disabled", "true");
                }
                else {
                    document.getElementById('beasiswa').removeAttribute("disabled");
                    document.getElementById('berkas').removeAttribute("disabled");
                    document.getElementById('submit_button').removeAttribute("disabled");
                }
            });
        });
    }

});
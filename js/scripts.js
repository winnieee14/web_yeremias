function loadSkills() {
    const XMLhttp = new XMLHttpRequest();
    XMLhttp.open('GET', 'fetch_skills.php', true);

    XMLhttp.onload = function() {
        if (XMLhttp.status === 200) {
            const skills = JSON.parse(XMLhttp.responseText);
            let output = '';

            skills.forEach(skill => {
                output += `
                    <div class="col-md-6 col-lg-6 col-sm-6 text-center mb-4">
                        <i class="${skill.icon} display-4 mb-2"></i>
                        <h5>${skill.name}</h5>
                    </div>
                `;
            });

            document.getElementById('skills-container').innerHTML = output;
        }
    };

    XMLhttp.send();
}

loadSkills();
setInterval(loadSkills, 1000);


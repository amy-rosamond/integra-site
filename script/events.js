const eventDisplay = (eventType) => {
    const eventsContainer = document.getElementById("eventsContainer");

    const conferenceBtn = document.getElementById("conference");
    const userBtn = document.getElementById("user");
    const committeeBtn = document.getElementById("committee");
    const allEventsBtn = document.getElementById("all-events");

    let conference = document.getElementsByClassName("conference");
    let user = document.getElementsByClassName("user");
    let committee = document.getElementsByClassName("committee");
    let allEvents = document.getElementsByClassName("all-events");

    let activeClass = document.getElementsByClassName("active-events");


    for (let i = 0; i < activeClass.length; i++) {
        activeClass[i].classList.remove("active-events");
    }

    eventsContainer.classList.remove("elementToFadeIn", "elementToFadeOut");
    void eventsContainer.offsetWidth;
    eventsContainer.classList.add("elementToFadeOut");

    setTimeout(function () {
        for (let i = 0; i < allEvents.length; i++) {
            allEvents[i].style.display = "none";
        }

        switch (eventType) {
            case "conference":
                for (let i = 0; i < conference.length; i++) {
                    conference[i].style.display = "flex";
                }
                conferenceBtn.classList.add("active-events");
                break;

            case "user":
                for (let i = 0; i < user.length; i++) {
                    user[i].style.display = "flex";
                }
                userBtn.classList.add("active-events");
                break;

            case "committee":
                for (let i = 0; i < committee.length; i++) {
                    committee[i].style.display = "flex"; 
                }
                committeeBtn.classList.add("active-events");
                break;

            case "all-events":
                for (let k = 0; k < allEvents.length; k++) {
                    allEvents[k].style.display = "flex";
                }
                allEventsBtn.classList.add("active-events");
                break;
        }

        eventsContainer.classList.remove("elementToFadeOut");
        eventsContainer.classList.add("elementToFadeIn");

    }, 150);
};

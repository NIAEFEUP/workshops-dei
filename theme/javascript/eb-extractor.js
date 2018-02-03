const oauth_token = 'VQ72BNV3V2V76VFQZ5QC'; // TODO: Store this somewhere.

/**
 * Script's entry point.
 * Create an AJAX request to Eventbrite's API to extract this user's owned events.
 */
function load_scheduled_talks() {
    let request = new XMLHttpRequest();
    request.onload = function() {
        parse_talk(request.responseText);
    }

    request.open('get', `https://www.eventbriteapi.com/v3/users/me/owned_events/?token=${oauth_token}`, true);
    request.send();
}

/**
 * Parser for single talk's API response.
 * It is expected for each event's description to have a 'Speaker:' string.
 * @param {string} response - GET Response from Eventbrite API.
 */
function parse_talk(response) {
    let talk_dict = JSON.parse(response);
    
    talk_dict.events.forEach(talk => {
        let talk_utc = talk.start.utc.match(/(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2})/);
        let talk_date = `${talk_utc[3]}/${talk_utc[2]}/${talk_utc[1]}`;
        let talk_time = `${talk_utc[4]}h${talk_utc[5]}`;

        let talk_description = talk.description.text.match(/(.*[\s\S]*)Speaker:(.*)/);

        let talk_attrs = {
            'title': talk.name.text, 'desc': talk_description[1], 'url': talk.url, 
            'date': talk_date, 'time': talk_time, 'speaker': talk_description[2]
        };
        create_talk_node(talk_attrs);
    });
}

/**
 * Dynamically create a new talk node with data extracted from API.
 * @param {Object.<string, string>} attrs - Dictionary with formatted response arguments.
 */
function create_talk_node(attrs) {
    let talk_details = document.createElement('div'); // Bootstrap's container class div.
    talk_details.setAttribute('class', 'container');

    talk_details.innerHTML = `<div class='row'>
    <span class='col'><i class='far fa-calendar-alt'></i>${attrs.date}</span>
    <span class='col'><i class='far fa-clock'></i>${attrs.time}</span>
    <div class="w-100"></div>
    <span class='col'><i class='fas fa-user'></i>${attrs.speaker}</span></div>`

    let talk_full_info = document.createElement('div'); // Bootstrap's info class div.
    talk_full_info.setAttribute('class', 'info');

    talk_full_info.innerHTML = `<div class='info'><h3>${attrs.title}</h3><p>${attrs.desc}</p><div class='container'>${talk_details.innerHTML}</div></div>`;

    let talk_full_box = document.createElement('div'); // Bootstrap's grid formatting div.
    talk_full_info.setAttribute('class', 'col-xs-12 col-sm-6 col-lg-4');

    let talk_attend_button = `<input type="button" onclick="location.href='${attrs.url}';" value="Select">`;
    talk_full_info.innerHTML = `<article>${talk_full_info.innerHTML}${talk_attend_button}</article>`;

    document.querySelector('main > .container > :first-child').appendChild(talk_full_info);
}

/**
 * Encodes argument to feed API.
 * @param {Object.<string, string>} data - Dictionary with request arguments.
 */
function ajax_dict_encoding(data) {
    return Object.keys(data).map(function(k) {
        return `${encodeURIComponent(k)}=${encodeURIComponent(data[k])}`;
    }).join('&');
}

load_scheduled_talks(); // Entry point call.
require('./bootstrap');
import Echo from "laravel-echo"

window.io = require('socket.io-client');
window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});
// window.Echo.join(`online`)
//     .here((users) => {
//         logger.e(jsonEncode(users));
//     })
//     .joining((user) => {
//         console.log(user.name);
//     })
//     .leaving((user) => {
//         console.log(user.name);
//     })
//     .error((error) => {
//         console.error(error);
//     })
window.Echo.join(`online`)
    .here(users => { this.users = users })
    .joining(user => this.users.push(user))
    .leaving(user => _.remove(this.users, user))
    .listen('NewMessage', e => {
        console.log(e)
    })

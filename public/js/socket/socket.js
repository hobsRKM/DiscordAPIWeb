const botData = [];

$( document ).ready(function() {
    hljs.highlightAll();
    const socket = io(SOCKET_CONNECTION_URL);
    socket.on("connect", () => {
        console.log("connected"); // x8WIv7-mJelg7on_ALbx
    });

    socket.on("disconnect", () => {
        console.log("disconnected");
    });

    socket.on("error", (error) => {
        console.log("failed");
    });

    socket.on("message", (data) => {
        botData.push( new Date().toLocaleTimeString());
        botData.push(data)
        $("#Canvas").empty();
        $("#RawJson").empty();
        $("#RawJson").append(JSON.stringify(botData));
        Process();
        CollapseLevel(4);
    });
});






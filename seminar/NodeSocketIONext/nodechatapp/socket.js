//socket.js는 서버소켓통신을 담당하는 서버 소켓 모듈 파일입니다.
//socket.io 팩키지 참조
const SocketIO = require("socket.io");

//socket.js모듈 기능정의
module.exports = (server) => {
    //서버측에서 서버 소켓과 연결된 모든 클라이언트의 In/Out통신을 담당하는 소켓객체 생성
    //const io = SocketIO(server, { path: "/socket.io" });


    //서버소켓에 대한 CORS 이슈 해결하기
    //서버소켓객체 io: 서버소켓과연결된 모든 사용자제어가능
    const io = SocketIO(server, {
        path: "/socket.io",
        cors: {
            origin: "*",
            methods: ["GET", "POST"],
        },
    });
    //자바스크립트에서의 .on(이벤트명, 이벤트처리함수);
    //각종 클라이언트(웹브라우저)의 서버측 io객체간 연결이 완료되면 관련 이벤트처리함수를 실행해라..
    //클라이언트와 서버간의 모든 실시간(웹소켓) 통신은 연결이 완료된 후에 가능하므로
    //모든 실시간요청과 응답처리 기능은 io.on(connection)이벤트 처리기 함수 내에 정의되어야 합니다.
    io.on("connection", (socket) => {

        //연결이 완료된 상태에서 개별 사용자간 요청과 응답처리는
        //socket.on(이벤트명, 이벤트처리함수);를 정의해서 비지니스로직을 구현합니다.
        //클라이언트에서 서버로 메시지를 전송하려면 미리 약속된 이벤트명을 호출해야하고
        //또한 서버측에서 클라이언트로 메시지를 전송하려면 미리 약속된 클라이언트측 이벤트명을 호출해야합니다.
        socket.on("broadcast", function (msg) {
            //io.emit(클라이언트에 정의되어야하는 이벤트 수신기명, 클라이언트로 전송할데이터);
            //특히 io.emit()메소드는 io서버객체와 연결된 모든 사용자들에게 메시지를 보내고 싶을 때 호출(현재100명이면 100명 모두에게)
            io.emit("receiveAll", msg);
            //socket.broadcast.emit("receive",msg);
        });



        //채팅방 입장하기 처리 서버 이벤트
        socket.on("entry", function (channel, nickName) { //핑

            //서버상 메모리에 해당 채팅방을 생성하고
            //이미 생성된 채널이 있으면 현재 사용자를 입장처리한다.
            socket.join(channel);

            //현재 채팅방에 입장한 사용자에게만 메시지 보내기
            socket.emit("entryok", `${nickName}로 ${channel}채널에 입장했습니다.`);

            //현재 입장하는 사용자를 제외한 이미 채팅방에 입장해 있는 다른 사용자들에게 메시지 보내기
            socket.to(channel).emit("entryok", `${channel}님이 채널에 입장했습니다.`);

            //현재 사용자를 포함한 채팅방의 모든이에게 메시지 보내기
            //io.to(channel).emit("entryok",`${channel}님이 채널에 입장했습니다.` );

        });

        //채팅방 전용 메시지 수발신기 정의
        socket.on("channelMsg", function (channel, msg) {
            //현재 사용자를 포함한 채팅방의 모든이에게 메시지 보내기
            io.to(channel).emit("channelReceive", msg);
        });
        //채팅방 전용 메시지 수발신기 정의
        socket.on("channelMsg", function (channel, msg) {
            //현재 사용자를 포함한 채팅방의 모든이에게 메시지 보내기
            io.to(channel).emit("channelReceive", msg);
        });



    });
}
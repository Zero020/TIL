var express = require('express');

//각종 사용자 요청과 응답을 처리해주는 라우터 객체 생성하기
var router = express.Router();

/* 
- 메인 페이지 요청과 응답 처리 라우팅메소트
- 요청주소: http://localhost:3000/
*/
router.get('/', function(req, res) {
  res.render('index', { title: 'Express' });
});

/*
- 서버 소켓서버와 모든 사용자간 채팅하는 웹페이지(뷰) 요청과 응답처리 라우팅
- 요청주소 : http://localhost:3000/chat
*/
//router.get('호출주소체계', 호출에 대한 서버응답처리하는 콜백함수정의);
router.get('/chat', function(req, res, next) {
  //콜백함수 내 req객체는 웹브라우저에서 서버로 전송되는 각종정보를 담고있는 객체..HttpRequest객체
  //res매개변수는 서버에서 웹브라우저/클라이언트로 응답을 처리할 수 있는 객체..HttpResponse객체
  //res.render('지정한 뷰파일의 경로지정', 뷰에 전달한 json데이터);
  //res.render('chat');
  res.render('chat.ejs');
});

/*
- 특정 채팅방에 연결된 사용자간 채팅하는 웹페이지(뷰) 요청과 응답처리 라우팅메소드
- 요청주소: http://localhost:3000/groupchat
*/
router.get("/groupchat", function (req, res) {
  res.render("groupchat.ejs");
});

module.exports = router;

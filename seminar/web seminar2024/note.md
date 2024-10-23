# 2024.10.12

# Next.js
소개 - vercel회사의 기술

    # node.js
    # stackbiltz
    리액트, 서버사이드 레이어까지 제공 

## JSX
Javascript + XML
리엑트에서 사용하는 기본 문법/파일 형식
자바스크립트에서는 js .jsx 사용 -> .js로 통합
타입스크립트에서는 .tsx만 사용

-대부분 함수 컴포넌트

//자바스크립트 파트

//XML파트
  return ---> JSX 노드

## RSC 리액트 서버 컴포넌트

서버 컴포넌트, 클라이언트 컴포넌트

Next.js에서는 모든 컴포넌트를 기본적으로 서버 컴포넌트로 생각

클라이언트 컴포넌트는 시작줄에 "use client"선언으로  구분

서버 컴포넌트는 async fuction선언할 수 있음
클라이언트 컴포넌트는 async funtion 선언할 수 없음
서버 컴포넌트 - 정적인 컨텐츠 담거나, 서버에서 수행해야 하는 작업들
클라이언트 컴포넌트 - 사용자 인터랙션이 필요한 내용을 담음

유의하실 규칙

1. 서버 컴포넌트 안에 클라이언트 컴포넌트 들어갈 수 있음
2. 클라이언트 컴포넌트 안에 서버 컴포넌트가 들어갈 수 없음

- page.tsx : 페이지 표시를 위한 서버 컴포넌트
    - form.tsx : 사용자 입력 폼을 처리하는 클라이언트컴포넌트
        - ErrorView.txs : 에러 출력을 위한 서버 컴포넌트
    - UserInfo.tsx : 로그인 후 사용자 정보가 표시되는 서버 컴포넌트
        - EditButton.tsx : 사용자가 클릭할 수 있는 수정 모드 전환 클라이언트 컴포넌트
  

### 레이아웃
자세한 레이어는 layout.tsx에 작성


레이어도 상하관계를 가지는 경우가 있다.
로그인페이지는 header,footer표시가 안되는 경우가 존재.
depth2밑에 depth3를 생성하면 중첩, 필요한 단계에서 정의해놓으면 그 디렉토리의 하위에서 적용.

레이아웃을 위치를 옮기면, 전체레이어를 변경하는건 초기단계에서하는게 나음.
상하관계는 앞설명과 같이 가능.

디렉토리 이름에 가로를 이용해서 생성한 다음, 페이지2를 통체로 옮기면 가로로 만들어진 주소는 반영되지 않음. 레이아웃은 만들 수 있음.라우터 그룹만 만들고, 특정그룹에만 적용.

### 템플릿

react hook은 클라이언트에서만 사용됨 //  react19이후로는 달라질 수 있음
레아이웃은 서버컴포넌트, 템플릿은 클라이언트컴포넌트 역할로 나뉨.
레이아웃 작업하다가 필요한건 템플릿에 작성. 템플릿에는 보통 use client작성을 안함.
레이아웃과 템플릿 두개 모두 작업시, 레이아웃이 템플릿보다 바깥쪽이 있음. children으로 포함
ui를 둘중 하나에 담아두고, 외적인 데이터 통신 등을 양쪽에 나눠놓은게 좋음.


--11-12
node.js 설치하기
nvm-windows
node -v
npx -v
npm -v



### import alis
//사용x
import {ComponentName} from '../../Components/atoms/Button.
//사용

//얀, pnpM, Bun - vscode 유사한 웹사이트

## 프로젝트 경로 관리

- / : 작업물을 모아놓은 상위 디렉토리
    -/project-name
        -/package.json
    -/first-project
        -/package.json
        -/second-project
            -/package.json :상위 디렉토리에도 package.json이 있고, 현재 디렉토리에는 package.json이 또 생김
        -/third-project
            -/pakage.json

## 클라이언트 컴포넌트의 위치

-/page-name
    - page.tsx
    - PrevButton.tsx
    - NextButon.tsx

-/app


## 결제를 받을 수 있는 api를 받아야한다. - 외부의 요청 혹은 외부에 공개
internal한건 서버를 이요


next.js가 임의로이 서버 액션에 대한 포스트요청 생성
CSRF방어 처리가 기본으로 포함 - API를 외부에서 호출하기가 더 어려진다. 
prisma, sequelize, drizzle ORM 사용 가능


## 배포
Static Generation - SSG

### Node.js 직접 배포 - 리눅스를 할줄 알아야 한다.

1. npm run build
2. npm run start
    2-1. pm2 같은 Process Manager 이용
3. apache, nginx 80 -> 3000 연결되도록 proxy 처리

versel에서 git이랑 연동 - 가장 쉽게 할 수 있는 방법-
 - Hobby: 개인계정만 가능
 - Pro ~ : 개인/조직계정
 next.js를 직접 관리

OpenNext
- AWS(개인)에 직접 배포 - lamda기반
- Versel보다 낮은 비용
- AWS 경험 필요
- 모든 리소스를 관리하는 AWS에 올리는 방식


리눅스와 severless 외, 
GitHub Pages- 유료
firebase Hosting

AWS Amplify - 아마존웹서비스에서 제공하는 여러가지 기능을 묶어 제공 - 초과한 사용량만큼 요금 부과





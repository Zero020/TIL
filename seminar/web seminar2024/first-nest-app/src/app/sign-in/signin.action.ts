'user server';
//

export async function signIn(email:string, password: string) {
    console.log({})
    if (email == 'admin@admin.com' && password == 'admin'){
        return {success: true, message: '인증에 성공했습니다.'};

    }else {
        return {success: false, message: '인증에 실패했습니다.'};

    }
}
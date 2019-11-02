function findSame(params) {
    // console.log(params[1])

    let temp1 = [];
    let temp2 = [];

    var irisan1 = params.slice(0, 1);
    var irisan2 = params.slice(3, 6);




    for (let i = 0; i < irisan1.length; i++) {
        // console.log(irisan1[i])
        temp1.push(irisan1[i])
        for (let j = 0; j < irisan2.length; j++) {
            // console.log(irisan2[j])
            // temp2.push(irisan2[j])
            if (irisan1[i][j] == irisan2[i][j]) {
                temp1.push(temp1[i][j])
            }
        }

    }

    console.log(temp1);
    console.log(temp2);
    console.log('-----------------');
    console.log(irisan1);
    console.log(irisan2);
    console.log(params);
}

findSame(['cat', 'listen', 'code', 'act', 'silent', 'tac'])
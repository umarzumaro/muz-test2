function randomize(numb) {

    // menggunakan Regex untuk validasi input angka
    let validasiAngka = /^[1-9]+$/;

    // variabel array untuk menampung hasil random
    let arr = [];

    if (validasiAngka.test(numb)) {

        //looping numb dengan maxNilai 10 
        for (let i = 1; i <= numb; i++) {
            // push result to variabel arr
            arr.push(Math.floor(Math.random() * 10 + 1))
        }

        //menjumlahkan isi dari array dengan .reduce
        const sum = arr.reduce((total, value) => total + value, 0);
        console.log(`Array[${numb}] = ${arr}
Sum = ${sum}`);

    } else {
        // return false
        return 'input harus berformat angka!';
    }


}

console.log(randomize(6))
// console.log(randomize('asd'))
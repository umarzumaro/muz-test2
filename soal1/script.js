// console.log('bismillahirohmanirohim');


function Biodata(name, age) {

    let me = {};
    me.name = name; // get param name
    me.age = age; // get param age

    me.address = "bekasi selatan"; // string
    me.hobbies = ["membaca", "bermain futsal"]; // array
    me.is_married = false; // boolean
    me.list_school = [
        {
            key_name: "elementary school",
            year_in: "2003",
            year_out: "2009",
            major: null
        },
        {
            key_name: "junior school",
            year_in: "2009",
            year_out: "2012",
            major: null
        },
        {
            key_name: "senior school",
            year_in: "2012",
            year_out: "2015",
            major: "IPA"
        }
    ]; // array of object

    me.skills = [
        {
            skill_name: "Design Graphic",
            level: "beginner"
        },
        {
            skill_name: "Mobile Programming",
            level: "Advenced"
        }
    ]; // array of object

    me.interest_in_coding = true; // boolean

    return me;

}

let name = Biodata('Muhammad Umar Zumaro', 22);

console.table(JSON.stringify(name));
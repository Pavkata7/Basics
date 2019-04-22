/* 4.	Fitness Rates
function fitness (day, place, hour){
    let day1 = day;
    let place1 = place;
    let hour1 = parseFloat(hour);

    if(day1 !== 'Saturday' && day1 !=='Sunday'){
        if(place1 === 'Fitness' && hour1 < 15.00){
            console.log('5');
        }else if(place1 === 'Fitness' && hour1 >= 15.00){
            console.log('7.5');
        }
        if(place1 === 'Sauna' && hour1 < 15.00){
            console.log('4');
        }else if(place1 === 'Sauna' && hour1 >= 15.00){
            console.log('6.5');
        }
        if(place1 === 'Instructor' && hour1 < 15.00){
            console.log('10');
        }else if(place1 === 'Instructor' && hour1 >= 15.00){
            console.log('12.5');
        }
    } else if(day1 === 'Saturday' || day1 === 'Sunday'){
        if(place1 === 'Fitness'){
            console.log('8');
        }
        if(place1 === 'Sauna'){
            console.log('7');
        }
        if(place1 === 'Instructor'){
            console.log('15');
        }
    }
}

fitness('Sunday', 'Fitness', 22.00);
*/

/* 5.	Greatest Common Divisor – GCD
function greatestCommonDivider ( a, b){
    let x = parseFloat(a);
    let y = parseFloat(b);

    while(y) {
        var t = y;
        y = x % y;
        x = t;
    }
    console.log(x);
}

greatestCommonDivider(2154, 458);
*/

/*6.	Same Numbers
function sameNumbers(num){
    let numArr = num.toString();
    let bool;

    for(let i = 0; i < numArr.length; i++) {
            if(i>0){
                if(numArr[i-1] === numArr[i]){
                    bool = true;
                }else{
                    bool = false;
                    break;
                }
            }
        }
        console.log(bool);
    var numbers = numArr
        .split('')
        .map(Number)
        .reduce(function (a, b){
        return a + b;
    }, 0);
    console.log(numbers);

    }

sameNumbers(2222222);
*/

/* 7.	Time to Walk
function TimeToWalk(steps, foot, kmh) {
    let stepsNumber = Number(steps);
    let stepsMetersHr = Number(foot);
    let studentSpeed = Number(kmh);

    let distanceMeters = stepsNumber * stepsMetersHr;
    let speedMetersSec = studentSpeed / 3.6;
    let time = distanceMeters / speedMetersSec;
    let rest = Math.floor(distanceMeters / 500);

    let timeMin = Math.floor(time / 60);
    let timeSec = Math.round(time - (timeMin * 60));
    let timeHr = Math.floor(time / 3600);
    console.log((timeHr < 10 ? "0" : "")
        + timeHr + ":"
        + (timeMin + rest < 10 ? "0" : "")
        + (timeMin + rest) + ":"
        + (timeSec < 10 ? "0" : "") + timeSec);
}

TimeToWalk(4000, 0.60, 5)
*/

/*8.	Flight Timetable
function airport (arg){
    let argx = arg;
    let arr = argx.toString().split('/\W\W+/gmi');
    let arrFinal = arr.toString().split(',')

    console.log(`${arrFinal[0]}: Destination - ${arrFinal[1]}, Flight - ${arrFinal[3]}, Time - ${arrFinal[2]}, Gate - ${arrFinal[4]}`)
}
airport(['Departures', 'London', '22:45', 'BR117', '42']);
*/

//9.	Calorie Object
//function calories (arg){
//    let argx = arg.toString().split('/\W\W*/gmi');
//    let argFinal = argx.toString().split(',');
//    var obj = {};
//
//    for(let i = 0; i < argFinal.length; i+= 2){
//        obj[argFinal[i]] = parseInt(argFinal[i+1]);
//    }
//    console.log(obj)
//}
//
//calories(['Yoghurt', 48, 'Rise', 138, 'Apple', 52]);

/* 10.	*Coffee Machine
function coffeeMachine (str){
    let array = str;
    let singleArray = [];
    let money = 0;
    let milk = 0;
    let sugar = 0.1;
    let costResult = [];
    let finalResult = 0;

    for(let i = 0; i < array.length; i++){
        singleArray = array[i].split(', ');

        money = singleArray[0];

        let cost = 0;

        if (singleArray[1] == "coffee"){
            if(singleArray[2] == "caffeine"){
                cost = 0.80;
            }else if(singleArray[2] == "decaf"){
                cost = 0.90;
            }
            if (singleArray[3] == "milk"){
                milk = Math.round(cost) / 10;
                cost += milk;
            }
        }else if (singleArray[1] == "tea"){
            cost = 0.80;
            if (singleArray[2] == "milk"){
                milk = Math.round(cost) / 10;
                cost += milk;
            }

        }

        if(singleArray[singleArray.length - 1] > 0){
            cost += sugar;
        }

        costResult[i] = cost;

        if(costResult[i] > money){
            console.log(`Not enough money for ${singleArray[1]}. Need ${(costResult[i] - money).toFixed(2)}$ more.`)
        }else{
            console.log(`You ordered ${singleArray[1]}. Price: ${(costResult[i]).toFixed(2)}$ Change: ${(money - costResult[i]).toFixed(2)}$`)
            finalResult += costResult[i];
        }

    }
    console.log(`Income Report: ${(finalResult).toFixed(2)}$`);
}
coffeeMachine(['1.00, coffee, caffeine, milk, 4', '0.40, tea, milk, 2',
'1.00, coffee, decaf, 0']);
*/


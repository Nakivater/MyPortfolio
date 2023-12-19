console.log(workArray([1,6,9,5,3,2,1,7],[1,0,1,5,3,6,7,4,2,1,6],"/"));


function workArray(array1,array2,operator){
    let array=[];
    if(array1.length!=0&&array2.length!=0,operator!="")
    {
        let l=0;
        if(array1.length>array2.length)
            l=array2.length;
        else
            l=array1.length;
        switch(operator)
        {
            case "+":
                for (let i=0;i<l;i++)
                {
                    array.push(array1[i]+array2[i]);
                }
                break;
            case "-":
                for (let i=0;i<l;i++)
                {
                    array.push(array1[i]-array2[i]);
                }
                break;
            case "*":
                for (let i=0;i<l;i++)
                {
                    array.push(array1[i]*array2[i]);
                }
                break;
            case "/":
                for (let i=0;i<l;i++)
                {
                    if(array2[i]==0)
                    {
                        array.push(0);
                    } else
                    array.push(array1[i]/array2[i]);
                }
                break;
            default:
                array=0;
                break;
        }
        if(array!=0) {
            if (array1.length > array2.length) {
                for (let i = 0; i < array1.length - array2.length; i++) {
                    array.push(array1[l + i]);
                }
            } else {
                for (let i = 0; i < array2.length - array1.length; i++) {
                    array.push(array2[l + i]);
                }
            }
        }
    }
    return array;
}
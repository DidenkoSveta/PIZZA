function firstNSmallest(array, n){
    let sortedArray = array.slice().sort((a, b) => b - a);
    let index = 0;
    let i = 0;

    while (array.length != n) {
        while ((index = array.lastIndexOf(sortedArray[i])) == -1) {
            ++i;
        }
        console.log(index);
        console.log(array);
        array.splice(index, 1);
    }

    return array;
  }

  console.log(firstNSmallest([2,1,2,3,4,2],3));
package main

import (
	"fmt"
	"strconv"
)

func main() {
	fmt.Println(reverse(123))
	fmt.Println(reverse(-123))
	fmt.Println(reverse(120))
}

func reverse(x int) int {
	num := x
	minus := 1

	if x < 0 {
		num = -1 * x
		minus = -1
	}

	str := strconv.Itoa(num)
	reverse := ""

	for i := len(str) - 1; i >= 0; i-- {
		reverse += str[i : i+1]
	}

	result, _ := strconv.Atoi(reverse)

	if len(fmt.Sprintf("%b", result)) > 31 {
		return 0
	}

	return minus * result
}

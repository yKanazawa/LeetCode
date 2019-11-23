package main

import (
	"fmt"
	"math"
)

func main() {
	fmt.Println(longestCommonPrefix([]string{"flower", "flow", "flight"}))
	fmt.Println(longestCommonPrefix([]string{"dog", "racecar", "car"}))
}

func longestCommonPrefix(strs []string) string {
	result := ""
	minStrLen := math.MaxInt32

	if len(strs) < 1 {
		return ""
	}

	for y := 0; y < len(strs); y++ {
		if minStrLen > len(strs[y]) {
			minStrLen = len(strs[y])
		}
	}

	for x := 0; x < minStrLen; x++ {
		for y := 0; y < len(strs)-1; y++ {
			if strs[y][x:x+1] != strs[y+1][x:x+1] {
				return result
			}
		}
		result += strs[0][x : x+1]
	}

	return result
}

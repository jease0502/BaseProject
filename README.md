# 軟體工程作業-祖名
[![Build Status](https://travis-ci.org/jease0502/BaseProject.svg?branch=master)](https://travis-ci.org/jease0502/BaseProject)
[![codecov](https://codecov.io/gh/jease0502/BaseProject/branch/master/graph/badge.svg)](https://codecov.io/gh/jease0502/BaseProject)


## Structure
```
.
├── ...
├── docs                    # Documentation
├── diagrams                # UML Diagrams
├── src                     # Application sources
├── test                    # Test sources
└── ...
```

# 介紹
1081 逢甲軟體工程課程使用的專題基礎專案。

# 特色



# 技術細節
## Test 組態
* 編譯器選項：`-ftest-coverage -fprofile-arcs`
* 連結器選項：`-lgcov --coverage`
* 前置處理器定義：`TEST`

## Test Code 寫法
* 主程式 `src/main.cpp` 的 main function 要用 `#ifndef TEST`、`#endif` 包裹
* 測試的 code 請寫在 `test/TestMain.cpp`
* `test/TestMain.cpp` 如果要呼叫 `src/main.cpp` 的 function，請記得在 header (`src/main.h`) 裡定義 function

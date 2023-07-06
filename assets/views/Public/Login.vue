<script setup>
import {reactive} from "vue";

const formData = reactive({
  username: "",
  password: "",
  remember: false,
});

</script>

<template>
  <div class="h-full relative max-xl:bg-slate-800 max-xl:px-2.5">
    <div class="relative h-full flex mx-auto">
      <div class="flex-1 bg-gray-700 relative p-[30px] max-xl:hidden">
        <div class="flex items-center relative text-white">
          <img src="../../images/logo.png" alt="" class="w-12 h-12 mr-2.5" />
          <span class="text-xl font-bold">ElementAdmin</span>
        </div>
        <div class="flex justify-center items-center h-[calc(100%-60px)]">
          <TransitionGroup appear tag="div">
            <img src="../../images/login-box-bg.svg" key="1" alt="" class="w-[350px]" />
            <div class="text-3xl text-white" key="2">欢迎使用本系统</div>
            <div class="mt-5 font-normal text-white text-sm" key="3">
              开箱即用的中后台管理系统
            </div>
          </TransitionGroup>
        </div>
      </div>
      <div class="flex-1 p-[30px] max-sm:p-2.5 relative">
        <div class="flex justify-between items-center text-white 2xl:justify-end xl:justify-end">
          <div class="flex items-center 2xl:hidden xl:hidden">
            <img src="../../images/logo.png" alt="" class="w-12 h-12 mr-2.5">
            <span class="text-xl font-bold">ElementAdmin</span>
          </div>
        </div>
        <Transition appear class="v-enter-active">
          <div class="h-full flex items-center m-auto w-full 2xl:max-w-[500px] xl:max-w-[500px] md:max-w-[500px] lg:max-w-[500px]">
            <el-form hide-required-asterisk size="large" :model="formData" label-position="top" class="p-5 h-auto m-auto max-xl:rounded-3xl max-xl:bg-white">
              <el-row :gutter="20">
                <el-col :span="24">
                  <el-form-item>
                    <h2 class="text-2xl font-bold text-center w-full">登录</h2>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="用户名">
                    <el-input name="username" v-model="formData.username" placeholder="请输入用户名" clearable />
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="密码">
                    <el-input :input-style="{width: '100%'}" type="password" show-password v-model="formData.password" placeholder="请输入密码" clearable />
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item>
                    <div class="flex justify-between items-center w-full">
                      <el-checkbox v-model="formData.remember" label="记住我" size="small" />
                      <el-link type="primary" :underline="false">忘记密码</el-link>
                    </div>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item>
                    <div class="w-full">
                      <el-button type="primary" class="w-full">登录</el-button>
                    </div>
                  </el-form-item>
                </el-col>
              </el-row>
            </el-form>
          </div>
        </Transition>
      </div>
    </div>
  </div>
</template>

<style scoped>
.el-form .el-row {
  margin-right: 0 !important;
  margin-left: 0 !important;
}
</style>
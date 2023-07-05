<script setup>
import {ElCol, ElForm, ElFormItem, ElInput, ElRow} from 'element-plus'

const formData = {
    username: "",
    password: "",
  };
</script>

<template>
  <div class="h-full relative max-xl:bg-slate-800 max-xl:px-2.5">
    <div class="relative h-full flex mx-auto">
      <div class="flex-1 bg-gray-500 bg-opacity-20 relative p-[30px] max-xl:hidden">1</div>
      <div class="flex-1 p-[30px] max-sm:p-2.5 relative">
        <div class="flex justify-between items-center text-white 2xl:justify-end xl:justify-end">
          <div class="flex items-center 2xl:hidden xl:hidden">
            <img src="../../images/logo.png" alt="" class="w-12 h-12 mr-2.5">
            <span class="text-xl font-bold">ElementAdmin</span>
          </div>
        </div>
        <Transition appear class="v-enter-active">
          <div class="h-full flex items-center m-auto w-full 2xl:max-w-[500px] xl:max-w-[500px] md:max-w-[500px] lg:max-w-[500px]">
            <ElForm :model="formData" label-position="top" class="p-5 h-auto m-auto max-xl:rounded-3xl max-xl:bg-white">
              <ElRow gutter="20">
                <ElCol span="24">
                  <ElFormItem>
                    <h2 class="text-2xl font-bold text-center w-full">登录</h2>
                  </ElFormItem>
                </ElCol>
                <ElCol span="24">
                  <ElFormItem label="用户名">
                    <ElInput :model="formData.username"></ElInput>
                  </ElFormItem>
                </ElCol>
              </ElRow>
            </ElForm>
          </div>
        </Transition>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>
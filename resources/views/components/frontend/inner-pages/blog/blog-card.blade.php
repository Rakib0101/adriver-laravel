@props(['href'=>"#", 'category'=>"", 'title'=> '', 'excerpt'=>'' ])
  <a href="{{$href}}" class="max-w-[480px] block w-full p-3 border border-gray-100 rounded-[14px] shadow-[0px_12px_32px_rgba(23,30,21,0.04)]"
  >
    <div class="w-full h-[248px]">
      <img
        src="{{ asset('frontend/assets/images/img/blog-card-01.png') }}"
        alt=""
        class="w-full h-full rounded-lg object-cover"
      />
    </div>
    <div class="pt-5">
      <p class="flex flex-wrap gap-1.5 items-center text-sm text-gray-700 mb-1.5">
        <span class="inline-flex gap-1.5 items-center text-blue-500">
          <i class="ph-fill ph-stack text-2xl"></i>
          <span class="font-medium">{{ $category }}</span>
        </span>
        <span class="text-gray-300">•</span>
        <span class="whitespace-nowrap">19 secs ago</span>
        <span class="text-gray-300">•</span>
        <span class="whitespace-nowrap">7 min read</span>
      </p>
      <h2
        class="mb-3 text-xl text-gray-900 font-medium font-display line-clamp-2"
      >
        {{ $title }}
      </h2>
      <p class="mb-3 text-base text-gray-500 line-clamp-3">
        {{ $excerpt }}
      </p>
      <div>
        <span
          class="inline-flex gap-1.5 items-center text-base text-primary-500 font-display font-medium"
          >Read More <arrow-double
        /></span>
      </div>
    </div>
  </a>
{{-- <script setup>
import BlogCard01 from "../../../assets/images/img/blog-card-01.png";
import LayersIcon from "../../Icons/Blog/LayersIcon.vue";
import ArrowDouble from "../../Icons/Blog/ArrowDouble.vue";

const props = defineProps({
  href: {
    type: String,
    default: "#",
  },
  title: {
    type: String,
    required: true,
  },
  excerpt: {
    type: String,
    required: true,
  },
  category: {
    type: String,
    default: "Travel",
  },
});
</script> --}}

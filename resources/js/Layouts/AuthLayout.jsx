import Sidebar from '@/Components/Sidebar';
import { Box, Flex } from '@chakra-ui/react';

export default function AuthLayout({ children }) {
  return (
    <Flex style={{ minHeight: '100vh' }} gap="14px">
      <Sidebar />
      <Box as="main" mt="80px">
        {children}
      </Box>
    </Flex>
  );
}
